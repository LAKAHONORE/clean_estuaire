import { Link } from "react-router-dom";

export default function Prestations() {
  return (
    <div className="flex flex-col w-full my-24">
    <div className="flex flex-row justify-center items-center">
      <span className="relative text-2xl font-semibold text-blue after:absolute after:left-0 after:w-full after:scale-x-50 after:border-b-4 after:border-blue after:bottom-0">
         Nos Prestations
      </span>
    </div>  

    <div className="flex flex-col md:grid grid-cols-4 gap-6 px-12 mt-16">

        <div className="relative hover:shadow-sm hover:shadow-blue" >
          <img src="/assets/pressing.jpg" className="w-full object-cover rounded-md" alt="" />

          <div className="absolute inset-0 flex justify-center items-center">
            <div className="flex flex-col">
              <h1 className="text-white font-bold text-2xl text-center ">Pressing</h1>

              <Link to="/pressing" className="border-2 text-center border-white text-white mt-10 px-6 py-2 shadow-lg shadow-black hover:scale-105 hover:bg-purple hover:text-white rounded-md transition-all">
                En savoir plus
              </Link>
            </div>
          </div>          
        </div>

        <div className="relative hover:shadow-sm hover:shadow-blue" >
          <img src="/assets/blanchisserie.jpg" className="w-full object-cover rounded-md" alt="" />

          <div className="absolute inset-0 flex justify-center items-center">
            <div className="flex flex-col">
              <h1 className="text-white font-bold text-2xl text-center">Blanchisserie</h1>

              <Link to="/blanchisserie" className="border-2 text-center border-white text-white mt-10 px-6 py-2 shadow-lg shadow-black hover:scale-105 hover:bg-purple hover:text-white rounded-md transition-all">
                En savoir plus
              </Link>
            </div>
          </div>          
        </div>



        <div className="relative hover:shadow-sm hover:shadow-blue" >
          <img src="/assets/repassage.jpg" className="w-full object-cover rounded-md" alt="" />

          <div className="absolute inset-0 flex justify-center items-center">
            <div className="flex flex-col">
              <h1 className="text-white font-bold text-2xl text-center">Repassage</h1>

              <Link to="/repassage" className="border-2 text-center border-white text-white mt-10 px-6 py-2 shadow-lg shadow-black hover:scale-105 hover:bg-purple hover:text-white rounded-md transition-all">
                En savoir plus
              </Link>
            </div>
          </div>          
        </div>



        <div className="relative hover:shadow-sm hover:shadow-blue" >
          <img src="/assets/collecte_livraison.jpg" className="w-full object-cover rounded-md" alt="" />

          <div className="absolute inset-0 flex justify-center items-center">
            <div className="flex flex-col">
              <h1 className="text-white font-bold text-2xl text-center">Collecte et livraison</h1>

              <Link to="/collecte-livraison" className="border-2 border-white text-center text-white mt-10 px-6 py-2 shadow-lg shadow-black hover:scale-105 hover:bg-purple hover:text-white rounded-md transition-all">
                En savoir plus
              </Link>
            </div>
          </div>          
        </div>

        

    </div>

  </div>
  )
}
