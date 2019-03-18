/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication1;


import com.mysql.jdbc.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import javax.swing.JOptionPane;

/**
 *
 * @author Ahlam LEBSIR
 */
public class Connexion {
    public static Connection connect() throws SQLException{
    Connection  cnx=null;
    cnx=(Connection) DriverManager.getConnection("jdbc:mysql://localhost:3306/salon?","root","");
    //JOptionPane.showMessageDialog(null,"connection succes");
    
    try{
    Class.forName("com.mysql.jdbc.Driver");
    
}catch(Exception e){
    System.out.println("blbal");
}
return cnx;
    
    }
}
