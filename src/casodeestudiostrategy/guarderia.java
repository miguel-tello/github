package casodeestudiostrategy;


import java.util.ArrayList;

public class guarderia {
	private nino[] ni�os;
	private doctor nextdoctor;
	public guarderia() {
		nextdoctor=new wang();
		ni�os=new nino[10];
		for(int i=0;i<10;i++) {
			ni�os[i]=new nino();
			
		}
	}
	
	
	public void realizarVisita() {
		// TODO Auto-generated method stub
		nextdoctor.visitar(ni�os);
		if(nextdoctor.getid()==0)
			nextdoctor=new Fong();
		else
			nextdoctor=new wang();
		
		
	} 
}
