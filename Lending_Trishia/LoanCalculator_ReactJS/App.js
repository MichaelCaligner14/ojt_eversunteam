import { Component } from 'react';
import ReactDOM from 'react-dom';
import Loancalc from './components/Loancalc.js';
import './App.css';

class App extends Component {
  render()
  {
    return (
      <div className="App">
        <Loancalc />
      </div>
    );
  }
  
}

export default App;
