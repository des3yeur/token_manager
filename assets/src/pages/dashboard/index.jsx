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
        "bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2OTgzMjY4MDksImV4cCI6MTY5ODMzMDQwOSwicm9sZXMiOlsiUk9MRV9BRE1JTiIsIlJPTEVfVVNFUiJdLCJ1c2VybmFtZSI6ImFkbWluQHRva2VuLW1hbmFnZXIuZnIifQ.GGzntZStdTP274jJR0VhfO5W1zHe0oZ-6QTAOkwGCnUJ3_mqHORA1Z-OIe-L43bB5uJhzhx_ZR5fUzBL0jIj_vnsp6f7GA8YtuOhLbI9CMGMHYmPrcjJOoq7i4c5zsZAy1qCfwvB8l7FwGONXjCWfUiScW-WCK5-i-U97CcuDyCW3DUM594IUVOs6jhvNpvyil7B5kIO3em7ttBQuiWPCMuYCZ8WMGeDbBrN-p4t9t0yKkcvkC8zVbtjqAcJjgRfSOrx_-NTqZsWicbUsQ7P50riKJKMnXpwdmMV-KkrH9UvZDTBYE7OIcTfCzRhcxtn8su3YNImZI4p3-nlw6bSMw",
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
