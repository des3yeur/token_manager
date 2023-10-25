import NavbarDesktop from "./desktop";
import NavbarMobile from "./mobile";
import React from "react";

const Navbar = () => {
  return (
    <>
      <NavbarMobile />
      <NavbarDesktop />
    </>
  );
};

export default Navbar;
