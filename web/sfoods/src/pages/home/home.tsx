import React from "react";
import ButtonAppBar from '../../components/appbar/AppBar';
import AppDrawer from "../../components/drawer/AppDrawer";


function Home(){
    return(
        <>
            <ButtonAppBar></ButtonAppBar>
            <AppDrawer></AppDrawer>
        </>
    );
}

export default Home;