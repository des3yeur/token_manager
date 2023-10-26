import React, { useState, useEffect, useContext } from "react";
import axios from "axios";
import { Token } from "../../../middleware/token";
import { AdminContext } from "../../context/adminProvider";

const Rust = () => {
  const { admin, setAdmin } = useContext(AdminContext);
  const [rustFields, setRustFields] = useState({
    tokenName: "",
    decimals: 0,
  });

  const config = {
    headers: {
      Authorization: `bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2OTY5NDMzOTUsImV4cCI6MTY5Njk0Njk5NSwicm9sZXMiOlsiUk9MRV9TVVBFUl9VU0VSIiwiUk9MRV9VU0VSIl0sInVzZXJuYW1lIjoidGVzdEB0ZXN0LmZyIn0.Dzl1frh-8n9eHLhSuVJLeIXB44n5r0feebEVLsslF1yQxKWbF2iMR9TxGWFMO9MaRb7ZraaFCKTcnWLNSu_s924HB3VUnKShn3vMTnPMinlrypL5IJQZFxX8Ms3HmtfLdN8xBSbPD5XuovqW4-4RD1Jzio2KXwRc-GycEptM7Aa5ZS3gmVvnJRMjCBeuw_D1x2vNduEi3xN86OhPvSn7E9y_WPjPvQ_dzgw5KSCf1b_Omulrtjf92o4KDVjQFZfcKhlZ151X4ymfLPeVoClSUozA9njfCKG1GJFay0M3ipi0726lMo5epSv6Xjpxx_uweaTQA0o8_x8Kfv8ZLikw1Q`,
    },
  };

  useEffect(() => {
    // console.log(admin);
    Token(admin.username, admin.password).then((response) =>
      setAdmin({ ...admin, token: response.data.token })
    );
    console.log(admin);
  }, []);

  const SubmitRust = () => {
    const data = {
      tokenName: rustFields.tokenName,
      decimals: rustFields.decimals,
    };

    axios
      .post("/api/blockchain_rusts", data, config)
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
