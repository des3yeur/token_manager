import React from "react";
import { createBrowserRouter } from "react-router-dom";
import Home from "../../pages/home";
import Dashboard from "../../pages/dashboard";



export const Provider = createBrowserRouter([
  {
    path: "/",
    element: <Home />,
  },
  {
    path: "/profil",
    element: <Dashboard />,
  },
]);

