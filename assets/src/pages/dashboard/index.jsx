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
        "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2OTgzOTYxMDUsImV4cCI6MTY5ODM5OTcwNSwicm9sZXMiOlsiUk9MRV9BRE1JTiIsIlJPTEVfVVNFUiJdLCJ1c2VybmFtZSI6ImFkbWluQHRva2VuLW1hbmFnZXIuZnIifQ.Xfs54e5kDCH1ocKKqen9i2Vuc1PEQ2yHtvd6CTHW1DzTvyUvvn7Uy4mtukk64X5Bats6gYnmc3rTgPA1chi4p5CiRLKG2HjWKD7HZYGlhV1uVSJANgANUeNDsMx4hFHbVkgkiMyDwzEYBOHk3LeJRVe-p_Deu9H1U5efT7mLHIRkZdVucYDCJxdY-09kSO9ILITGR_a04aVxm1OgUmJ46Ee1UnjZt21niR5xYCP97YY6eEbqWOFsNKbNxOBhRjDHTBbAD0k-fmu_xOioSfE46476sfLfT7wnwc9XAAqN1-Hdc1LIo1s3CtB3JK0Dk-7dWwoiR_h90BYiP6Ye7Dd6zw",
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
      <div className="bg-green95 min-h-screen min-w-screen">
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
          <>
            <div className="flex justify-center items-center">
              <div className="card card-tertiary">
                  <Img></Img>
                <div>
                Contactez l'administrateur pour bénéficier de plus de fonctionnalités
                </div>
              </div>
            </div>
          </>
        )}
      </div>
      <div>
        <Navbar />
      </div>
    </>
  );
};

export default Dashboard;
