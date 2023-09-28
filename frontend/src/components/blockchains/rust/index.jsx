import React, { useState } from "react";
import axios from "axios";

const Rust = () => {
  const [rustFields, setRustFields] = useState({
    tokenName: "",
    decimals: 0,
  });

  const SubmitRust = () => {
    const data = {
      tokenName: rustFields.tokenName,
      decimals: rustFields.decimals,
    };

    axios
      .post("/api/blockchain_rusts", data)
      .then(() => {
        alert("créé");
      })
      .catch((error) => console.error(error));
  };

  return (
    <>
      <form action="">
        <div className="flex flex-col items-center">
          <label htmlFor="">Token name</label>
          <input
            type="text"
            className="border border-cyan-100"
            onChange={(event) => {
              setRustFields({
                ...rustFields,
                tokenName: event.target.value,
              });
            }}
          />
        </div>
        <div className="flex flex-col items-center py-4">
          <label htmlFor="">Decimals</label>
          <input
            type="text"
            className="border border-cyan-100"
            onChange={(event) => {
              setRustFields({
                ...rustFields,
                decimals: parseInt(event.target.value),
              });
            }}
          />
        </div>
        <div className="flex flex-col items-center">
          <button
            type="button"
            onClick={() => SubmitRust()}
            className="bg-cyan-300 p-2 uppercase font-bold text-lg"
          >
            Envoyer
          </button>
        </div>
      </form>
    </>
  );
};

export default Rust;
