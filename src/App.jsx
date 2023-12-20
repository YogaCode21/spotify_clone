import React from "react";
import "./App.scss";
import Navbar from "./components/Navbar";
import Main from "./components/Main";
const App = () => {
  return (
    <>
      <div className="outerWrap">
        <div className="App">
          <Navbar />
          <Main />
        </div>
        <div className="musicControl">Music Control</div>
      </div>
    </>
  );
};

export default App;
