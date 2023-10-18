"use client";
import axios from "axios";

export const Get = (path, config) => {
  return axios
    .get(`http://localhost:8000/api/${path}`, config)
    .then((response) => {
      return response;
    })
    .catch((error) => {
      return error;
    });
};

export const GetId = (path, id) => {
  return axios
    .get(`http://localhost:8000/api/${path}/${id}`)
    .then((response) => {
      return response;
    })
    .catch((error) => {
      return error;
    });
};

export const Post = (path, data, config) => {
  return axios
    .post(`http://localhost:8000/api/${path}`, data, config)
    .then((response) => {
      return response;
    })
    .catch((error) => {
      return error;
    });
};

export const Put = (path, id) => {
  return axios
    .put(`http://localhost:8000/api/${path}/${id}`)
    .then((response) => {
      return response;
    })
    .catch((error) => {
      return error;
    });
};

export const Delete = (path, id, config) => {
  return axios
    .delete(`http://localhost:8000/api/${path}/${id}`, config)
    .then((response) => {
      return response;
    })
    .catch((error) => {
      return error;
    });
};
