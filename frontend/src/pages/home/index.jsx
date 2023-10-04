import React, { useEffect, useState } from "react";
import axios from "axios";
import process from "process";

const Home = () => {
  const [posts, setposts] = useState([]);
  const [createPost, setCreatePost] = useState({
    name: "",
    description: "",
    price: 0,

  });

  // console.log(process.env.URL_TEST);
  useEffect(() => {
    axios
      .get("/api/products")
      .then((response) => {
        // console.log(response.data["hydra:member"]);
        setposts(response.data["hydra:member"]);
      })
      .catch((error) => {
        console.log(error);
      })
      .finally(() => {
        console.log("bien joué");
      });
  }, []);

  const Deletepost = (id) => {
    console.log(`Id : ${id}`);
    axios.delete(`http://localhost:8000/api/products/${id}`);
  };

  const OnChangeName = (event) => {
    setCreatePost({
      ...createPost,
      name: event.target.value,
    });
    console.log(createPost);
  };
  const OnChangeDesc = (event) => {
    setCreatePost({
      ...createPost,
      description: event.target.value,
    });
    console.log(createPost);
  };
  const OnChangePrice = (event) => {
    setCreatePost({
      ...createPost,
      price: parseInt(event.target.value),
    });
    console.log(createPost);
  };

  const SubmitForm = () => {
    const data = {
      name: createPost.name,
      description: createPost.description,
      price: createPost.price,
    };
    axios.post("http//localhost:8000/api/products", data).then(() => {
      alert("Produit créé !");
    });
  };

  return (
    <>
      <div className="bg-black text-white">
        <form className="flex justify-center" action="">
          <div>
            <label htmlFor="">Nom</label>
            <input type="text" onChange={OnChangeName} />
          </div>
          <div>
            <label htmlFor="">Description</label>
            <input type="text" onChange={OnChangeDesc} />
          </div>
          <div>
            <label htmlFor="">Price</label>
            <input type="text" onChange={OnChangePrice} />
          </div>
          <div>
            <button type="button" onClick={() => SubmitForm()}>
              envoyer
            </button>
          </div>
        </form>
        {console.log(posts)}
        <div className="grid grid-cols-2">
          {posts.map((post) => {
            return (
              <div key={post.id}>
                Nom : {post.name}
                <br />
                Descriptions : {post.description}
                <div>
                  <button
                    type="button"
                    className="bg-red-500 p-4 uppercase"
                    onClick={() => Deletepost(post.id)}
                  >
                    supprimer
                  </button>
                </div>
              </div>
            );
          })}
        </div>
      </div>
    </>
  );
};
export default Home;
