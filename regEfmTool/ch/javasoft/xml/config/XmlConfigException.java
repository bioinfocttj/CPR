/*
 * =============================================================================
 * Simplified BSD License, see http://www.opensource.org/licenses/
 * -----------------------------------------------------------------------------
 * Copyright (c) 2008-2009, Marco Terzer, Zurich, Switzerland
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without 
 * modification, are permitted provided that the following conditions are met:
 * 
 *     * Redistributions of source code must retain the above copyright notice, 
 *       this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright 
 *       notice, this list of conditions and the following disclaimer in the 
 *       documentation and/or other materials provided with the distribution.
 *     * Neither the name of the Swiss Federal Institute of Technology Zurich 
 *       nor the names of its contributors may be used to endorse or promote 
 *       products derived from this software without specific prior written 
 *       permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" 
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE 
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE 
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE 
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR 
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF 
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS 
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN 
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) 
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE 
 * POSSIBILITY OF SUCH DAMAGE.
 * =============================================================================
 */
package ch.javasoft.xml.config;

import org.dom4j.Node;

/**
 * The <tt>XmlConfigException</tt> is thrown if the xml configuration has not
 * been able to parse, or if an error occurred during the resolving phase, e.g. 
 * because a parametrized attribute value could not be resolved.
 */
public class XmlConfigException extends Exception {

	private static final long serialVersionUID = 1L;
	
	private final String mPath;

	/**
	 * @param message	the error message
	 * @param path		the xpath-like expression to localize the error in the
	 * 					xml file
	 */
	public XmlConfigException(String message, String path) {
		super(message);
		mPath = path;
	}
	/**
	 * @param message	the error message
	 * @param path		the node where the error cause is located
	 */
	public XmlConfigException(String message, Node path) {
		super(message);
		mPath = XmlUtil.getNodePath(path, true /*recurseParents*/);
	}

	/**
	 * @param message	the error message
	 * @param path		the xpath-like expression to localize the error in the
	 * 					xml file
	 * @param cause		the causing exception
	 */
	public XmlConfigException(String message, String path, Throwable cause) {
		super(message, cause);
		mPath = path;
	}
	/**
	 * @param message	the error message
	 * @param path		the node where the error cause is located
	 * @param cause		the causing exception
	 */
	public XmlConfigException(String message, Node path, Throwable cause) {
		super(message, cause);
		mPath = XmlUtil.getNodePath(path, true /*recurseParents*/);
	}
	
	@Override
	public String getLocalizedMessage() {
		return mPath + ": " + super.getLocalizedMessage();
	}
	
	/**
	 * Returns the location path in the xml file
	 */
	public String getPath() {
		return mPath;
	}
	
}
