import React, { useEffect, useState } from "react";
import axios from "axios";
import Solidity from "../../components/blockchains/solidity";
import Rust from "../../components/blockchains/rust";

const Dashboard = () => {
  const [blockchains, setBlockchains] = useState([]);
  const [showBlockchains, setShowBlockchains] = useState({
    go: false,
    rust: false,
    ruby: false,
    solidity: false,
  });

  useEffect(() => {
    axios
      .get("/api/blockchains")
      .then((response) => {
        // console.log(response.data["hydra:member"]);
        setBlockchains(response.data["hydra:member"]);
      })
      .catch((error) => {
        console.error(error);
      });
  }, []);

  const Blockchains = (blockchain) => {
    if (blockchain === "rust") {
      // alert("je suis rust");
      setShowBlockchains({
        go: false,
        rust: true,
        ruby: false,
        solidity: false,
      });
    } else if (blockchain === "solidity") {
      // alert("je suis solidty");
      setShowBlockchains({
        go: false,
        rust: false,
        ruby: false,
        solidity: true,
      });
    } else {
      console.log();
    }
  };

  return (
    <>
      <div className="grid grid-cols-3">
        <div className="grid grid-cols-2">
          {blockchains.map((blockchain) => {
            return (
              <div key={blockchain.id}>
                <div
                  className="inline-flex"
                  onClick={() => Blockchains(blockchain.blockchain)}
                >
                  {blockchain.symbol}
                  <img
                    src={blockchain.logo}
                    alt=""
                    width={50}
                    height={"auto"}
                  />
                </div>
              </div>
            );
          })}
        </div>
        <div className="col-span-2 flex justify-center items-center p-8">
          {showBlockchains.solidity ? <Solidity /> : null}
          {showBlockchains.rust ? <Rust /> : null}
        </div>
      </div>
    </>
  );
};

export default Dashboard;
