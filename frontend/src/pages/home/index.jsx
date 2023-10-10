import React from "react";

const Home = () => {
  return (
    <main className="min-w-screen min-h-screen bg-[url('https://www.coinhouse.com/wp-content/uploads/2019/06/Token_.jpg')] bg-cover bg-no-repeat bg-center">
      <div className="min-h-screen flex flex-col justify-center items-center">
        <h1 className="uppercase font-bold text-lg">
          Bienvenue sur le site Token Manager !
        </h1>
        <h1 className="uppercase font-bold">Connectez-vous pour continuer</h1>
        <a href="http://localhost:8000/login" className="p-2 bg-green-800">
          Connexion
        </a>
      </div>
    </main>
  );
};
export default Home;
