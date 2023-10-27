import React, { useContext, useState, useEffect } from "react";
import axios from "axios";
import { Token } from "../../../middleware/token";
import { AdminContext } from "../../context/adminProvider";

const Solidity = () => {
  const { admin, setAdmin } = useContext(AdminContext);
  const [solidityFields, setSolidityFields] = useState({
    tokenName: "",
    symbol: "",
    initialSupply: 0,
    decimals: 0,
  });

  const config = {
    headers: {
      Authorization: `bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2OTg0MTA3MzEsImV4cCI6MTY5ODQxNDMzMSwicm9sZXMiOlsiUk9MRV9BRE1JTiIsIlJPTEVfVVNFUiJdLCJ1c2VybmFtZSI6ImFkbWluQHRva2VuLW1hbmFnZXIuZnIifQ.Hc6cZT6ohozVGd8C0-ImfVdPjMw6GTBtOSRl2CUfDdfnlNPE43IzaEmMSdaucF90MT8KuZX1kGLEZdQfOY3swSvzRr2irslSXKhlp3Xfww49MIudQ35tiCVOCHdy22FhHWSF-6I4xfcRELBqrPSek93k2ByvRsT5A1wQFB-NJqg3ARogQuhARUZ_jwpVKWw0DfdVnSNViVwgQVc5Y3fqtVUZs76C4Dj9PFJ13TYwviTPM5XDkufMLPMrP4JIFESWVVjo1P_OfQdtYWzv11BDUe64zDApPN8O_jqoe9EaCs5zIIr85PyPw80kXPkjWzTW9LxJustKjk-_dpOxC-3TDQ`,
    },
  };

  useEffect(() => {
    // console.log(admin);
    Token(admin.username, admin.password).then((response) =>
      setAdmin({ ...admin, token: response.data.token })
    );
    console.log(admin);
  }, []);

  const SubmitSolidity = () => {
    const data = {
      tokenName: solidityFields.tokenName,
      symbol: solidityFields.symbol,
      initialSupply: solidityFields.initialSupply,
      decimals: solidityFields.decimals,
    };

    axios
      .post("/api/blockchain_solidities", data, config)
      .then(() => {
        alert("créé");
      })
      .catch((error) => console.error(error));
  };

  return (
    <>
      <form action="">
        <div className="flex flex-col items-center ">
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
                initialSupply: parseInt(event.target.value),
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
            className="btn mr-2 mb-2 btn-primary border-dark btn-text"
          >
            Envoyer
          </button>
        </div>
      </form>
    </>
  );
};

export default Solidity;
