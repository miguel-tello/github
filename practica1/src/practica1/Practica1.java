

import java.net.InetAddress;
import java.net.UnknownHostException;
public class Practica1{
    public static void main(String[] args) throws UnknownHostException {
        InetAddress address = InetAddress.getByName("speedtest.tele2.net");
        System.out.println(address.getHostAddress());
    }
}
