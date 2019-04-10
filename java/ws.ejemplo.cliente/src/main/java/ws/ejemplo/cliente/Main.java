package ws.ejemplo.cliente;
import ws.ejemplo.cliente.comunicacion.*;

public class Main {

    public static void main(String[] args) {
        new Main().callWebService();
    }

    private void callWebService() {
        SaludoXML service = new SaludoXML();
        SaludoXMLPortType port = service.getSaludoXMLPort();
        System.out.println(port.factorial("5"));
    }
}
