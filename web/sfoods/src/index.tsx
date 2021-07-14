import { ThemeProvider } from '@material-ui/core';
import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import NavegationProvider from "./context/navegation/NavegationContext";
import { Theme } from './context/theme/Theme';

ReactDOM.render(
  <ThemeProvider theme={Theme}>
    <NavegationProvider>
      <App />
    </NavegationProvider>  
  </ThemeProvider>
  , 
  document.getElementById('root')
);

