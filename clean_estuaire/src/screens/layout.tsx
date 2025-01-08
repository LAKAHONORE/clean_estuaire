import { Outlet } from "react-router-dom";
import Footer from "./components/footer/Footer";
import Navbar from "./components/navbar/Navbar";
import { useEffect, useState } from "react";
import { httpConfigService } from "../http/config";
import { createContext } from "react";
import { BlanchisseType, CollecteType, ConfigType, PressingType, RepassageType } from "../types/ConfigType";

type Context = {
  blanchisserie: BlanchisseType ,
  repassage: RepassageType,
  collecte_livraison: CollecteType,
  pressing: PressingType,
  config: ConfigType
}

const ConfigContext = createContext<Context | null>(null);

export {ConfigContext}

export function Layout() {
  
  /*const { pathname } = useLocation()

  useEffect(() => {
    console.log('changement de page');

  }, [pathname])*/

  const [config, setConfig] = useState<Context | null>(null)

  

  useEffect(() => {    

    httpConfigService.index().then((data) => {
      setConfig(data);
        
    })
  }, [])

  

  return (
    <ConfigContext.Provider value={config} >
      <Navbar />
      <Outlet />
      <Footer />
    </ConfigContext.Provider>
  )
}