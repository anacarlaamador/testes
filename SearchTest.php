SearchTest 

   shouldShowBioTest{
       
       $google = new Google();

       $page = $google->search("Obama");

       asserTrue($page->hasBio());

   }

   shouldShowCalculatorTest{

       $google = new Google();

       $page = $google->search("1+1");

       asserTrue($page->hasCalculator());
    
   }

   shouldShowNotFoundMessageTest{

       $google = new Google();

       $page = $google -> search("qwjduqwudhqwid19981283912uwhfuew");

       asserTrue($page->hasNotFoundMessage());
   }