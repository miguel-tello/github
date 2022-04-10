public class Coordenadas {

    private int x;
    private int y;
    public Coordenadas(){
        AlAzar alAzar=new AlAzar();
        x=alAzar.getNumero();
        y=alAzar.getNumero();
    }

    @Override
    public String toString() {
        return " Coordenadas: x="+x+" y="+y;
    }
}
