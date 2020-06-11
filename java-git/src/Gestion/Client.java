package Gestion;

public class Client {
	private int client_code ,Num_gsm ,Permis , Cin ;   
	private String client_nom , client_adresse ; 
	public Client( int client_code , String client_nom , String client_adresse , int Num_gsm , int Permis , int Cin )
	{
		this.client_code=client_code ; 
		this.client_nom=client_nom ;  
		this.client_adresse=client_adresse ; 
		this.Num_gsm=Num_gsm ; 
		this.Permis=Permis ; 
		this.Cin=Cin ; 
	}
	public int getclient_code() {
		return client_code ; 
	}
	public String getclient_nom() {
		return client_nom ; 
	}
	public String getclient_adresse() {
		return client_adresse ; 
	}
	public int getNum_gsm() {
		return Num_gsm ; 
	}
	public int getPermis() {
		return Permis ; 
	}
	public int getCin() {
		return Cin ; 
	}
	
	
	
}
