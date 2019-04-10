<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Birds extends CI_Controller {

	
	public function index()
	{
		
		// moving data from controller to view

		$data['heading'] = "Birds, Birds, and more Birds! From Alberta";
		$data['picture'] = "owl.jpg";
		$data['content'] = "<p>Birds, also known as Aves, are a group of endothermic vertebrates, characterised by feathers, toothless beaked jaws, the laying of hard-shelled eggs, a high metabolic rate, a four-chambered heart, and a strong yet lightweight skeleton.[3] Birds live worldwide and range in size from the 5 cm (2 in) bee hummingbird to the 2.75 m (9 ft) ostrich. They rank as the world's most numerically-successful class of tetrapods, with approximately ten thousand living species, more than half of these being passerines, sometimes known as perching birds. Birds have wings which are more or less developed depending on the species; the only known groups without wings are the extinct moa and elephant birds.[4] Wings, which evolved from forelimbs, gave birds the ability to fly, although further evolution has led to the loss of flight in flightless birds, including ratites, penguins, and diverse endemic island species of birds. The digestive and respiratory systems of birds are also uniquely adapted for flight. Some bird species of aquatic environments, particularly seabirds and some waterbirds, have further evolved for swimming.</p><p>The fossil record demonstrates that birds are modern feathered dinosaurs, having evolved from earlier feathered dinosaurs within the theropod group, which are traditionally placed within the saurischian dinosaurs. The closest living relatives of birds are the crocodilians. Primitive bird-like dinosaurs that lie outside class Aves proper, in the broader group Avialae, have been found dating back to the mid-Jurassic period, around 170 million years ago. Many of these early \"stem-birds\", such as Archaeopteryx, were not yet capable of fully powered flight, and many retained primitive characteristics like toothy jaws in place of beaks, and long bony tails. DNA-based evidence finds that birds diversified dramatically around the time of the Cretaceous–Palaeogene extinction event 66 million years ago, which killed off the pterosaurs and all the non-avian dinosaur lineages. But birds, especially those in the southern continents, survived this event and then migrated to other parts of the world while diversifying during periods of global cooling. This makes them the sole surviving dinosaurs according to cladistics.</p>";


		$this->load->view('includes/header');
		$this->load->view('bird_view', $data);
		$this->load->view('includes/footer');
	}


	public function loon()
	{
		
		// moving data from controller to view

		$data['heading'] = "The Loon";
		$data['picture'] = "loon.jpg";
		$data['content'] = "<p>The loons (North America) or divers (Great Britain/Ireland) are a group of aquatic birds found in many parts of North America and northern Eurasia. All living species of loons are members of the genus Gavia, family Gaviidae and order Gaviiformes.</p><p>Loons, which are the size of a large duck or a small goose, resemble these birds in shape when swimming. Like ducks and geese, but unlike coots (which are Rallidae) and grebes (Podicipedidae), the loon's toes are connected by webbing. The loons may be confused with the cormorants (Phalacrocoracidae), which are not too distant relatives of divers, and like them are heavy-set birds whose bellies, unlike those of ducks and geese, are submerged when swimming. Loons in flight resemble plump geese with seagulls' wings that are relatively small in proportion to their bulky bodies. The bird points its head slightly upwards while swimming, but less so than cormorants. In flight, the head droops more than in similar aquatic birds.</p>";


		$this->load->view('includes/header');
		$this->load->view('bird_view', $data);
		$this->load->view('includes/footer');
	}


	public function falcon()
	{
		
		// moving data from controller to view

		$data['heading'] = "The Falcon";
		$data['picture'] = "falcon.jpg";
		$data['content'] = "<p>Falcons are birds of prey in the genus Falco, which includes about 40 species. Falcons are widely distributed on all continents of the world except Antarctica, though closely related raptors did occur there in the Eocene.</p><p>Adult falcons have thin, tapered wings, which enable them to fly at high speed and change direction rapidly. Fledgling falcons, in their first year of flying, have longer flight feathers, which make their configuration more like that of a general-purpose bird such as a broad-wing. This makes flying easier while learning the exceptional skills required to be effective hunters as adults. There are many different types of falcon.</p>";


		$this->load->view('includes/header');
		$this->load->view('bird_view', $data);
		$this->load->view('includes/footer');
	}

	public function sparrow()
	{
		
		// moving data from controller to view

		$data['heading'] = "The Sparrow";
		$data['picture'] = "sparrow.jpg";
		$data['content'] = "<p>Sparrows are a family of small passerine birds. They are also known as true sparrows, or Old World sparrows, names also used for a particular genus of the family, Passer.[1] They are distinct from both the American sparrows, in the family Passerellidae, and from a few other birds sharing their name, such as the Java sparrow of the family Estrildidae. Many species nest on buildings and the house and Eurasian tree sparrows, in particular, inhabit cities in large numbers, so sparrows are among the most familiar of all wild birds. They are primarily seed-eaters, though they also consume small insects. Some species scavenge for food around cities and, like gulls or rock doves will happily eat virtually anything in small quantities.</p><p>Generally, sparrows are small, plump, brown and grey birds with short tails and stubby, powerful beaks. The differences between sparrow species can be subtle. Members of this family range in size from the chestnut sparrow (Passer eminibey), at 11.4 centimetres (4.5 in) and 13.4 grams (0.47 oz), to the parrot-billed sparrow (Passer gongonensis), at 18 centimetres (7.1 in) and 42 grams (1.5 oz). Sparrows are physically similar to other seed-eating birds, such as finches, but have a vestigial dorsal outer primary feather and an extra bone in the tongue.[2][3] This bone, the preglossale, helps stiffen the tongue when holding seeds. Other adaptations towards eating seeds are specialised bills and elongated and specialised alimentary canals.[4]</p>";


		$this->load->view('includes/header');
		$this->load->view('bird_view', $data);
		$this->load->view('includes/footer');
	}

}