package observer;

public class libro {
	
	private String nombre;
	private boolean estado;
	libro(String string,boolean b){
    	nombre=string;
    	estado = b;
    }

	public libro() {
		// TODO Auto-generated constructor stub

	}

	public String getnombre() {
		// TODO Auto-generated method stub
		return nombre;
	}
	
	public boolean getestado(){
		return estado;
	}

}
