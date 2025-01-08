import { createBrowserRouter } from "react-router-dom";
import Home from "../src/screens/home/Home";
import Blanchisserie from "../src/screens/blanchisserie/Blanchisserie";
import Pressing from "../src/screens/pressing/Pressing";
import CollecteLivraison from "../src/screens/collecte-livraison/CollecteLivraison";
import { Layout } from "../src/screens/layout";
import Repassage from "../src/screens/repassage/Repassage";

const router = createBrowserRouter([
  {
    path : "/",
    element: <Layout />,
    children: [
      {
        index: true,
        element: <Home />
      },
      {
        path : "/blanchisserie",
        element : <Blanchisserie />
      },
      {
        path: "/pressing",
        element: <Pressing />
      },
      {
        path: "/collecte-livraison",
        element: <CollecteLivraison />
      },
      {
        path: "/repassage",
        element: <Repassage />
      }
    ]
  },  

]);

export default router;