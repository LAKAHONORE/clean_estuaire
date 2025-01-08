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
