import React, {useState, createContext} from "react"

export const AdminContext = createContext();

const AdminProvider = ({ children }) => {
  const [admin, setAdmin] = useState({
    username: window.user.email,
    roles: window.user.roles,
    password: window.user.password,
    // surname: "",
    // token: "",
  });

  return (
    <AdminContext.Provider value={{ admin, setAdmin }}>
      {children}
    </AdminContext.Provider>
  );
};

export default AdminProvider;
