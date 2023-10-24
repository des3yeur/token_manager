import React from "react";

const NavbarDesktop = () => (
  <footer>
    <div className="navbar navbar-main navbar-expand-lg navbar-dark justify-content-between navbar-footer w-full">
      <div className="navbar-nav navbar-nav-hover flex-row flex h-full items-center">
        <div className="nav-item ">
          <a href="/profil" className="nav-link">
            <button className="nav-link-inner-text">📺 Profil</button>
          </a>
        </div>
        <div className="nav-item">
          <a href="/login" className="nav-link">
            <button className="nav-link-inner-text">Login</button>
          </a>
        </div>
        <div className="nav-item">
          <a href="/register" className="nav-link">
            <button className="nav-link-inner-text">Register</button>
          </a>
        </div>
      </div>
      <div className="time text-center ">
        <p>Tous droits réservés. © 2023 Copyright.</p>
      </div>
    </div>
  </footer>
);

export default NavbarDesktop;
