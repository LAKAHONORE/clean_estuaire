import { useContext } from "react"
import { ConfigContext } from "../../layout";

export default function BlanchisserieC() {
  const take = useContext(ConfigContext);
  
  return (
    <div className="flex flex-col w-full my-24">
      <div className="flex flex-col justify-center items-center">
        <span className="relative text-2xl font-semibold text-blue after:absolute after:left-0 after:w-full after:scale-x-50 after:border-b-4 after:border-blue after:bottom-0">
          Blanchisserie
        </span>
        <p className="w-[70%] text-center my-6">
          {take?.blanchisserie.text}
        </p>

      </div>

      <div className="flex flex-col md:flex-row justify-center px-12 mt-14">

        <div className="flex flex-row justify-center w-full mb-8 md:w-1/2">
          <img src="/assets/blanchisserie.jpg" className="w-full md:w-[80%] rounded-md" alt="" />
        </div>

        <div className="flex flex-col w-full md:w-1/2">


          <p className="text-justify"> 

          {take?.blanchisserie.description}

           </p>
        </div>
      </div>

    </div>
  )
}
