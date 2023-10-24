import NavbarDesktop from "./navbar/desktop";
import NavbarMobile from "./navbar/mobile";
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
