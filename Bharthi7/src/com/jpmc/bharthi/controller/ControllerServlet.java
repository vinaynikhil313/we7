
package com.jpmc.bharthi.controller;

import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.jpmc.bharathi.servlet.ActionServlet;

/**
 * @author sree
 *
 */
public class ControllerServlet extends HttpServlet {

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
    throws ServletException, IOException {

        String parameter = request.getParameter("parameter");

        // if category page is requested
        if (parameter.equals("login")) {
        	
        	 
        	String username=request.getParameter("U_ID");
        	String password = request.getParameter("Password");
        	
        	ActionServlet actionServletObject = new ActionServlet();
    		actionServletObject.loginActionServlet(username,password);
        }

   }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
    throws ServletException, IOException {

        String userPath = request.getServletPath();

        // if addToCart action is called
        if (userPath.equals("/addToCart")) {
            // TODO: Implement add product to cart action
        	
        } 
        // use RequestDispatcher to forward request internally
        String url = "/WEB-INF/view" + userPath + ".jsp";

        try {
            request.getRequestDispatcher(url).forward(request, response);
        } catch (Exception ex) {
            ex.printStackTrace();
        }
    }

}
