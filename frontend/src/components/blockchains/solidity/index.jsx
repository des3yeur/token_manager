import React, { useState } from "react";
import axios from "axios";

const Solidity = () => {
  const [solidityFields, setSolidityFields] = useState({
    tokenName: "",
    symbol:"",
    initialSupply:0,
    decimals: 0,
  });

  const SubmitSolidity = () => {
    const data = {
      tokenName: solidityFields.tokenName,
      symbol: solidityFields.symbol,
      initialSupply: solidityFields.initialSupply,
      decimals: solidityFields.decimals,
    };

    axios
      .post("/api/blockchain_soliditys", data)
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
              setSolidityFields({
                ...solidityFields,
                tokenName: event.target.value,
              });
            }}
          />
        </div>
        <div className="flex flex-col items-center">
          <label htmlFor="">Symbol</label>
          <input
            type="text"
            className="border border-cyan-100"
            onChange={(event) => {
              setSolidityFields({
                ...solidityFields,
                symbol: event.target.value,
              });
            }}
          />
        </div>
        <div className="flex flex-col items-center py-4">
          <label htmlFor="">Initial Supply</label>
          <input
            type="text"
            className="border border-cyan-100"
            onChange={(event) => {
              setSolidityFields({
                ...solidityFields,
                initalSupply: parseInt(event.target.value),
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
              setSolidityFields({
                ...solidityFields,
                decimals: parseInt(event.target.value),
              });
            }}
          />
        </div>
        <div className="flex flex-col items-center">
          <button
            type="button"
            onClick={() => SubmitSolidity()}
            className="bg-cyan-300 p-2 uppercase font-bold text-lg"
          >
            Envoyer
          </button>
        </div>
      </form>
    </>
  );
};

export default Solidity;
