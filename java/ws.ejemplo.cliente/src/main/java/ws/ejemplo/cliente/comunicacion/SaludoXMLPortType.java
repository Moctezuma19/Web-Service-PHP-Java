package ws.ejemplo.cliente.comunicacion;
import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.jws.WebResult;
import javax.jws.WebService;
import javax.jws.soap.SOAPBinding;


/**
 * This class was generated by the JAX-WS RI.
 * JAX-WS RI 2.2.9-b130926.1035
 * Generated source version: 2.2
 * 
 */
@WebService(name = "SaludoXMLPortType", targetNamespace = "urn:SaludoXMLwsdl")
@SOAPBinding(style = SOAPBinding.Style.RPC)
public interface SaludoXMLPortType {


    /**
     * Saluda a la persona
     * 
     * @param nombre
     * @return
     *     returns java.lang.String
     */
    @WebMethod(operationName = "Saludar", action = "urn:SaludoXMLwsdl#Saludar")
    @WebResult(partName = "return")
    public String saludar(
        @WebParam(name = "nombre", partName = "nombre")
        String nombre);

    /**
     * Funcion que calcula el factorial
     * 
     * @param numero
     * @return
     *     returns java.lang.String
     */
    @WebMethod(operationName = "Factorial", action = "urn:FactorialXMLwsdl#Factorial")
    @WebResult(partName = "return")
    public String factorial(
        @WebParam(name = "numero", partName = "numero")
        String numero);

}