import CallUs from "../components/call-us/CallUs";
import Hero from "../components/old-hero/Hero";
import BlanchisserieC from "./blanchisseri-c/BlanchisserieC";

export default function Blanchisserie() {
  const bgUrl = "/assets/old_hero.jpg";
  return (
      <>
        <Hero img={bgUrl} title="Blanchisserie"/>
        <BlanchisserieC />
        <CallUs />
      </>
  )
}
