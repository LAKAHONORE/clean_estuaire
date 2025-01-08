import CollecteLivraisonC from './collecte-livraison-c/CollecteLivraisonC';
import Hero from '../components/old-hero/Hero';
import CallUs from '../components/call-us/CallUs';

export default function CollecteLivraison() {
  const bgUrl = "/assets/old_hero.jpg";
  return (
      <>
        <Hero img={bgUrl} title="Collecte et Livraison"/>
        <CollecteLivraisonC />
        <CallUs />
      </>
  )
}
