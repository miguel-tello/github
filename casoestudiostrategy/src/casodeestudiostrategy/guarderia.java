package casodeestudiostrategy;


import java.util.ArrayList;

public class guarderia {
	private nino[] niños;
	private doctor nextdoctor;
	public guarderia() {
		nextdoctor=new wang();
		niños=new nino[10];
		for(int i=0;i<10;i++) {
			niños[i]=new nino();
			
		}
	}
	
	
	public void realizarVisita() {
		// TODO Auto-generated method stub
		nextdoctor.visitar(niños);
		if(nextdoctor.getid()==0)
			nextdoctor=new Fong();
		else
			nextdoctor=new wang();
		
		
	} 
}
