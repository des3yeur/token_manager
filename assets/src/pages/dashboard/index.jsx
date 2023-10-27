import React, { useEffect, useState } from "react";
import axios from "axios";
import Solidity from "../../components/blockchains/solidity";
import Rust from "../../components/blockchains/rust";
import Navbar from "../../components/layouts/navbar";

const Dashboard = () => {
  const [blockchains, setBlockchains] = useState([]);
  const [showBlockchains, setShowBlockchains] = useState({
    go: false,
    rust: false,
    ruby: false,
    solidity: false,
  });

  const config = {
    headers: {
      Authorization:
        "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2OTg0MTA3MzEsImV4cCI6MTY5ODQxNDMzMSwicm9sZXMiOlsiUk9MRV9BRE1JTiIsIlJPTEVfVVNFUiJdLCJ1c2VybmFtZSI6ImFkbWluQHRva2VuLW1hbmFnZXIuZnIifQ.Hc6cZT6ohozVGd8C0-ImfVdPjMw6GTBtOSRl2CUfDdfnlNPE43IzaEmMSdaucF90MT8KuZX1kGLEZdQfOY3swSvzRr2irslSXKhlp3Xfww49MIudQ35tiCVOCHdy22FhHWSF-6I4xfcRELBqrPSek93k2ByvRsT5A1wQFB-NJqg3ARogQuhARUZ_jwpVKWw0DfdVnSNViVwgQVc5Y3fqtVUZs76C4Dj9PFJ13TYwviTPM5XDkufMLPMrP4JIFESWVVjo1P_OfQdtYWzv11BDUe64zDApPN8O_jqoe9EaCs5zIIr85PyPw80kXPkjWzTW9LxJustKjk-_dpOxC-3TDQ",
    },
  };

  useEffect(() => {
    axios
      .get("/api/blockchains", config)
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
    } else if (blockchain === "go") {
      // alert("je suis go");
      setShowBlockchains({
        go: true,
        rust: false,
        ruby: false,
        solidity: false,
      });
    } else if (blockchain === "ruby") {
      // alert("je suis ruby");
      setShowBlockchains({
        go: false,
        rust: false,
        ruby: true,
        solidity: false,
      });
    } else {
      console.log();
    }
  };

  return (
    <>
      {window.user.roles.includes("ROLE_ADMIN") ? (
        <div className="bg-green95">
          <div className="grid grid-cols-3 ">
            <div className="grid grid-cols-2 text-white95 text-center card card-tertiary">
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
            <div className="col-span-2 flex justify-center items-center p-8  card card-tertiary">
              {showBlockchains.solidity ? <Solidity /> : null}
              {showBlockchains.rust ? <Rust /> : null}
              {showBlockchains.go ? <Go /> : null}
              {showBlockchains.ruby ? <Ruby /> : null}
            </div>
          </div>

          <h1>CONTENU ADMIN</h1>
        </div>
      ) : (
        <>Contactez l'administrateur pour bénéficier des fonctions</>
      )}
      <div>
        <Navbar />
      </div>
    </>
  );
};

export default Dashboard;
