import React, { createContext, useState, useContext, ReactNode } from 'react'; 

const NavegationContext = createContext<any | undefined>(null);

export default function NavegationProvider({children}: { children: ReactNode}){

    const [drawerOpen, setDrawerOpen] = useState(false); 

    return(
    
        <NavegationContext.Provider value={{ drawerOpen, setDrawerOpen }}>
            { children }
        </NavegationContext.Provider>
    )
}

export function useNavegation(){
    const {drawerOpen, setDrawerOpen}  = useContext(NavegationContext); 
    return {drawerOpen, setDrawerOpen}; 
}


