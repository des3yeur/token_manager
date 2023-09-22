import React, { useEffect, useState } from "react";
import axios from "axios";

const Dashboard = () => {
  const [showingEth, setShowingEth] = useState(false);
  const [eth, setEth] = useState({
    Tokenname: "",
    Symbol: "",
    initialsupply: "",
    decimals: "",
    template: "",
    tokenname: "",
    symbol: "",
  });

  const ShowEth = () => {
    const SubmitData = () => {
      const data = {
        Tokenname: eth.Tokenname,
        Symbol: eth.Symbol,
        initialsupply: eth.InitialSupply,
        decimals: eth.Decimals,
        template: eth.Template,
        tokenname: eth.tokenname,
        symbol: eth.symbol,
      };

      axios
        .post("/api/ethereums", data)
        .then(() => alert("success"))
        .catch((error) => alert(error));
    };

    return (
      <>
        <form action="" className="flex flex-col">
          <div>
            <label htmlFor="">Token name</label>
            <input
              type="text"
              onChange={(e) => {
                setEth({
                  ...eth,
                  Tokenname: e.target.value,
                  tokenname: e.target.value,
                });
              }}
            />
          </div>
          <div>
            <label htmlFor="">Symbol</label>
            <input
              type="text"
              onChange={(e) => {
                setEth({
                  ...eth,
                  symbol: e.target.value,
                  Symbol: e.target.value,
                });
              }}
            />
          </div>
          <div>
            <label htmlFor="">Initial Supply</label>
            <input
              type="text"
              onChange={(e) => {
                setEth({
                  ...eth,
                  InitialSupply: e.target.value,
                  InitialSupply: e.target.value,
                });
              }}
            />
          </div>
          <div>
            <label htmlFor="">Decimals</label>
            <input
              type="text"
              onChange={(e) => {
                setEth({
                  ...eth,
                  Decimals: e.target.value,
                  Decimals: e.target.value,
                });
              }}
            />
          </div>
          <div>
            <label htmlFor="">Template</label>
            <input
              type="text"
              onChange={(e) => {
                setEth({
                  ...eth,
                  Template: e.target.value,
                  Template: e.target.value,
                });
              }}
            />
          </div>
          <button type="button" onClick={() => SubmitData()}>
            Envoyer
          </button>
        </form>
      </>
    );
  };

  return (
    <>
      <div className="grid grid-cols-3">
        <div className="grid grid-cols-2 p-4 bg-blue-300">
          <div>SUI</div>
          <div>Aptos</div>
          <div>
            <button
              type="button"
              className="p-4 bg-blue-900 uppercase text-white font-bold"
              onClick={() => setShowingEth(true)}
            >
              ETH
            </button>
          </div>
          <div>TRX</div>
        </div>
        <div className="flex justify-center items-center p-8 col-span-2">
          {/* {ShowEth()}; */}
          {showingEth === true ? ShowEth() : null}
        </div>
      </div>
    </>
  );
};

export default Dashboard;
