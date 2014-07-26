package com.jpmc.bharthi.dao;
import java.sql.*;

import javax.sql.*;

import com.jpmc.bharathi.servlet.*;

public class LoginDAO {

		public void Login(String username, String passsword){
			
			
			
			try {
				Class.forName("com.mysql.jdbc.Driver");
				Connection conn = null;
				conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/mydb","root", "root");
				Statement st = conn.createStatement();
				ResultSet rs = st.executeQuery("select * from login");
				while(rs.next())
				{
					int i= rs.getInt("U_ID");
					String s= rs.getString("Password");
					System.out.println("i="+i+"s="+s);
				}	
				conn.close();
				
			}
			
			catch(Exception e){
			 e.printStackTrace();	
			}
		
			System.out.println("sxvfdf");
		}
		
}
