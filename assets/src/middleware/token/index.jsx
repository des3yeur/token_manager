import { Post } from "../../components/tools/axios";

export const Token = (email, password) => {
  const data = {
    username: email,
    password: password,
  };
  return Post("token", data).then((response) => {
    return response;
  });
};
