/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package projet.appplicationfrais;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;

/**
 *
 * @author mleprovost
 */
public class Dao {

    private String url = "jdbc:mysql://localhost/applifrais";
    private String user = "root";
    private String passwd = "";
    private Connection connect;

    public Dao() {
        try {
            connect = DriverManager.getConnection(url, user, passwd);

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }        // TODO add your handling code here:

        
    }
    
}
