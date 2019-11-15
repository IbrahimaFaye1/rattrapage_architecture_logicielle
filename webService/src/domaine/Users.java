package domaine;
import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement
public class Users
{
    private int id;
    private String nom, prenom, email, password, token;


    public Users(String nom, String prenom, String email, String password) {

        setNom(nom);
        setPrenom(prenom);
        setEmail(email);
        setPassword(password);

    }
    public Users(int id, String nom, String prenom, String email) {

        setNom(nom);
        setPrenom(prenom);
        setEmail(email);
        setId(id);

    }

    public int getId()
    {
        return this.id;
    }

    public void setId(int id)
    {
        this.id = id;
    }

    public String getNom()
    {
        return this.nom;
    }

    public void setNom(String nom)
    {
        this.nom = nom;
    }

    public String getPrenom()
    {
        return this.prenom;
    }

    public void setPrenom(String prenom)
    {
        this.prenom = prenom;
    }

    public String getEmail()
    {
        return this.email;
    }

    public String getToken() {
		return this.token;
	}
	public void setToken(String token) {
		this.token = token;
	}
	public void setEmail(String email)
    {
        this.email = email;
    }

    public String getPassword()
    {
        return this.password;
    }

    public void setPassword(String password)
    {
        this.password = password;
    }

    public Users()
    {

    }
}
