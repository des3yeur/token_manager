import React from "react";
import Navbar from "../../components/layouts/navbar";

const Home = () => {
  return (
    <main className="bg-green95">
      <div className="  min-h-screen flex flex-col justify-center items-center">
        <div className="card card-tertiary ">
          <div className="card-header ">
            <h1 className="uppercase font-bold text-lg">
              Bienvenue sur le site Token Manager !
            </h1>
          </div>
          <div className="card-body">
            <h1 className="card-text">Connectez-vous pour continuer</h1>
            <div className="flex justify-center d-flex mt-3">
              <a href={"/login"}>
                <button
                  className="btn btn-lg mr-2 btn-primary border-dark"
                  type="button"
                >
                  <p className="">Connectez vous</p>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
  );
};
export default Home;
