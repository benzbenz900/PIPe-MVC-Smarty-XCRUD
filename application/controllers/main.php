<?php
class Main extends Controller {
	function __construct()
	{

	}
	
	function index()
	{
		$t = $this->loadView('sectionLayout/main');

		$t->set("Name", "Fred Irving Johnathan Bradley Peppergill");
		$t->set("FirstName", array("John", "Mary", "James", "Henry"));
		$t->set("LastName", array("Doe", "Smith", "Johnson", "Case"));
		$t->set(
			"Class",
			array(
				array("A", "B", "C", "D"),
				array("E", "F", "G", "H"),
				array("I", "J", "K", "L"),
				array("M", "N", "O", "P")
			)
		);
		$t->set(
			"contacts",
			array(
				array("phone" => "1", "fax" => "2", "cell" => "3"),
				array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")
			)
		);

		$t->set("option_values", array("NY", "NE", "KS", "IA", "OK", "TX"));
		$t->set("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
		$t->set("option_selected", "NE");
		

		$t->render();
	}

	function page2(){
		$t = $this->loadView('sectionLayout/main');

		$t->set("pageview", "page2");

		$t->set("option_values", array("NY", "NE", "KS", "IA", "OK", "TX"));
		$t->set("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
		$t->set("option_selected", "NE");
		
		$t->render();
	}

}

?>
