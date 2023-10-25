import React from "react";

const NavbarDesktop = () => (
  <footer>
    <div className="navbar navbar-main navbar-expand-lg navbar-dark justify-content-between navbar-footer">
      <div className="navbar-nav navbar-nav-hover flex-row flex h-full items-center w-full ">
        <div className="nav-item ">
          <a href="/profil" className="nav-link">
            <button className="nav-link-inner-text ">📺 Profil</button>
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
        <div className="nav-item">
          <a href="" className="nav-link">
            <button className="nav-link-inner-text">Logout</button>
          </a>
        </div>
        <div className="time text-center ">
          <p>Tous droits réservés. © 2023 Copyright.</p>
        </div>
      </div>
    </div>
  </footer>
);

export default NavbarDesktop;
