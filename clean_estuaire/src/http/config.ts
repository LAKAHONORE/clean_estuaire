import {back} from "../services/back"



export const httpConfigService = {
  index: async() => {
    const config = await back("/listConfig")

    return config
  }
}