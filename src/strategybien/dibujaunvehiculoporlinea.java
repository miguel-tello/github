package strategybien;

public class dibujaunvehiculoporlinea implements dibujacatalogo {

	@Override
	public void dibuja(vistavehiculos[] vv) {
		// TODO Auto-generated method stub
		for(int i =0;i<vv.length;i++) {
			vv[i].dibuja();
			System.out.println();
		}
	}

}
