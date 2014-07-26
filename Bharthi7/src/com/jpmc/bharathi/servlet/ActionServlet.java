package com.jpmc.bharathi.servlet;
import com.jpmc.bharthi.dao.*;
public class ActionServlet {

	 LoginDAO loginDaoObject = new LoginDAO();
	 
	 public void loginActionServlet(String username, String password) {
		 
		 
		 loginDaoObject.Login(username, password);
		 
	 }
	 
}
