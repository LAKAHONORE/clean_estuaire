import PressingC from './pressing-c/PressingC';
import CallUs from '../components/call-us/CallUs';
import Hero from '../components/old-hero/Hero';

export default function Pressing() {
  const bgUrl = "/assets/old_hero.jpg";
  return (
      <>
        <Hero img={bgUrl} title="Pressing"/>
        <PressingC />
        <CallUs />
      </>
  )
}
