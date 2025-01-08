import CallUs from "../components/call-us/CallUs";
import Hero from "../components/old-hero/Hero";
import RepassageC from "./repassage-c/RepassageC";

export default function Repassage() {
  const bgUrl = "/assets/old_hero.jpg";

  return (
    <>
      <Hero img={bgUrl} title="Repassage" />
      <RepassageC />
      <CallUs />
    </>
  )
}
