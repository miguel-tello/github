package strategybien;

public class dibujatresvehiculosporlinea implements dibujacatalogo {

	@Override
	public void dibuja(vistavehiculos[] vv) {
		// TODO Auto-generated method stub
		for(int i =0;i<vv.length;i++) {
			
			vv[i].dibuja();
			if((i+1)%3!=0||i==0)
				System.out.print(" ");
			else
				System.out.println();
		}
	}

}
