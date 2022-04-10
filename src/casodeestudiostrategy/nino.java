package casodeestudiostrategy;

import java.util.Random;
public class nino {
	
	private String statuslogopeda;
	private String statusoculista;
	public nino() {
		Random rand = new Random();
		int upperbound = 3;
      int int_random = rand.nextInt(upperbound);
      switch(int_random) {
      case 0: statuslogopeda="mal";break;
      case 1: statuslogopeda="regular";break;
      case 2: statuslogopeda="bien";break;
      
      }
      
      int_random = rand.nextInt(upperbound);
      switch(int_random) {
      case 0: statusoculista="mal";break;
      case 1: statusoculista="regular";break;
      case 2: statusoculista="bien";break;
      
      }
     
	}
	
	
	public String getstatusOculista() {
		return statusoculista;
	}
	
	public String getstatusLogopeda() {
		return statuslogopeda;
	}
	
	
	
	
}
